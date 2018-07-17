<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Google\Cloud\Firestore\FirestoreClient;
class Firebase_controller extends CI_Controller {
	
	public function index() {
		echo "aw";
	}
	
	public function retrieveData($database) {
		$firestore = new FirestoreClient(['projectId' => 'mytimesheet-9d4a0',"keyFilePath" => "./key.json"]);
		$docfsData = $firestore->collection($database);
		$query = $docfsData->where('uploaded', '=', 'N')->documents();
		$result = array();
		foreach ($query as $document) {
			if ($document->exists()) {
				foreach($document->data() as $key=>$val) {
					if($key != "uploaded") {
						if(is_object($val)) { 
							$objClass = get_class($val);
							switch($objClass) {
								case "Google\Cloud\Core\GeoPoint":
									$res = $val->latitude() . "," . $val->longitude();
									$result[$key] = $res;
								break;
								case "Google\Cloud\Core\Timestamp":
									$res = date("Y-m-d H:i:s",strtotime($val));
									$result[$key] = $res;
								break;
							}
						} 
						else { 
							$result[$key] = $val;
						}
					}
				}
				$result['id_firestore'] = $document->id();
			}
			$docfsData->document($document->id())->set([
				'uploaded' => "Y"
			], ['merge' => true]);
		}
		if(count($result) > 0) {
			$this->load->model('Firebase','fbase');
			$result = $this->fbase->saveData($database,$result);
			if($result) { 
				print("[".date("Y-m-d H:i:s")."][Retrieve] Message: Record successfully retrieved. (".$database.")".PHP_EOL); 
			} 
			else { 
				print("[".date("Y-m-d H:i:s")."][Retrieve] Message: Record was not saved. (".$database.")".PHP_EOL); 
			}
		} else {
			print("[".date("Y-m-d H:i:s")."][Retrieve] Message: No records found. (".$database.")".PHP_EOL);	
		}
	}

	public function saveData($database) {
		if($database == "employee_info") { $fdbase = "employee"; } else { $fdbase = $database; }
		if($database == "projects") { $fdbase = "project_list"; } else { $fdbase = $database; }
		$this->load->model('Firebase','fbase');
		$data = $this->fbase->selectData($database,array("id_firestore" => NULL));
		if(is_array($data) && count($data) > 0) {
			foreach($data as $res=>$resv) {
				$mydata = array();
				foreach($resv as $key=>$val) {
					if($key != "id_firestore") {
						$mydata[$key] = $val;
					}
				}
		
				if(count($mydata) > 0) {			
					$firestore = new FirestoreClient(['projectId' => 'mytimesheet-9d4a0',"keyFilePath" => "./key.json"]);
					$addRecord = $firestore->collection($fdbase)->newDocument();
					$recordID = $addRecord->id();
					$addRecord->set($mydata);
				
					if($recordID != "") {
						$result = $this->fbase->updateData($database,array("id_firestore" => $recordID),array("id"=>$mydata["id"]));
						print("[".date("Y-m-d H:i:s")."][Insert] Message: (".$recordID.")Successfully created new document for collection: " . $database.PHP_EOL);
					} else {
						print("[".date("Y-m-d H:i:s")."][Insert] Message: (ID: ".$mydata['id'].")Could not create document for collection: " . $database.PHP_EOL);
					}
				}
			}
		} else {
			print("[".date("Y-m-d H:i:s")."][Insert] Message: No records found. (".$database.")".PHP_EOL);
		}
	}	

}
