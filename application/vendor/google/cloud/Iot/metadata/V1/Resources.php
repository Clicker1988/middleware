<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/resources.proto

namespace GPBMetadata\Google\Cloud\Iot\V1;

class Resources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa4170a23676f6f676c652f636c6f75642f696f742f76312f7265736f75" .
            "726365732e70726f746f1213676f6f676c652e636c6f75642e696f742e76" .
            "311a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70" .
            "726f746f1a17676f6f676c652f7270632f7374617475732e70726f746f22" .
            "cd050a06446576696365120a0a026964180120012809120c0a046e616d65" .
            "180220012809120e0a066e756d5f6964180320012804123a0a0b63726564" .
            "656e7469616c73180c2003280b32252e676f6f676c652e636c6f75642e69" .
            "6f742e76312e44657669636543726564656e7469616c12370a136c617374" .
            "5f6865617274626561745f74696d6518072001280b321a2e676f6f676c65" .
            "2e70726f746f6275662e54696d657374616d7012330a0f6c6173745f6576" .
            "656e745f74696d6518082001280b321a2e676f6f676c652e70726f746f62" .
            "75662e54696d657374616d7012330a0f6c6173745f73746174655f74696d" .
            "6518142001280b321a2e676f6f676c652e70726f746f6275662e54696d65" .
            "7374616d7012380a146c6173745f636f6e6669675f61636b5f74696d6518" .
            "0e2001280b321a2e676f6f676c652e70726f746f6275662e54696d657374" .
            "616d7012390a156c6173745f636f6e6669675f73656e645f74696d651812" .
            "2001280b321a2e676f6f676c652e70726f746f6275662e54696d65737461" .
            "6d70120f0a07626c6f636b656418132001280812330a0f6c6173745f6572" .
            "726f725f74696d65180a2001280b321a2e676f6f676c652e70726f746f62" .
            "75662e54696d657374616d70122d0a116c6173745f6572726f725f737461" .
            "747573180b2001280b32122e676f6f676c652e7270632e53746174757312" .
            "310a06636f6e666967180d2001280b32212e676f6f676c652e636c6f7564" .
            "2e696f742e76312e446576696365436f6e666967122f0a05737461746518" .
            "102001280b32202e676f6f676c652e636c6f75642e696f742e76312e4465" .
            "766963655374617465123b0a086d6574616461746118112003280b32292e" .
            "676f6f676c652e636c6f75642e696f742e76312e4465766963652e4d6574" .
            "6164617461456e7472791a2f0a0d4d65746164617461456e747279120b0a" .
            "036b6579180120012809120d0a0576616c75651802200128093a02380122" .
            "f7020a0e4465766963655265676973747279120a0a026964180120012809" .
            "120c0a046e616d6518022001280912500a1a6576656e745f6e6f74696669" .
            "636174696f6e5f636f6e66696773180a2003280b322c2e676f6f676c652e" .
            "636c6f75642e696f742e76312e4576656e744e6f74696669636174696f6e" .
            "436f6e666967124f0a1973746174655f6e6f74696669636174696f6e5f63" .
            "6f6e66696718072001280b322c2e676f6f676c652e636c6f75642e696f74" .
            "2e76312e53746174654e6f74696669636174696f6e436f6e66696712340a" .
            "0b6d7174745f636f6e66696718042001280b321f2e676f6f676c652e636c" .
            "6f75642e696f742e76312e4d717474436f6e66696712340a0b687474705f" .
            "636f6e66696718092001280b321f2e676f6f676c652e636c6f75642e696f" .
            "742e76312e48747470436f6e666967123c0a0b63726564656e7469616c73" .
            "18082003280b32272e676f6f676c652e636c6f75642e696f742e76312e52" .
            "6567697374727943726564656e7469616c22480a0a4d717474436f6e6669" .
            "67123a0a126d7174745f656e61626c65645f737461746518012001280e32" .
            "1e2e676f6f676c652e636c6f75642e696f742e76312e4d71747453746174" .
            "6522480a0a48747470436f6e666967123a0a12687474705f656e61626c65" .
            "645f737461746518012001280e321e2e676f6f676c652e636c6f75642e69" .
            "6f742e76312e487474705374617465224f0a174576656e744e6f74696669" .
            "636174696f6e436f6e66696712190a11737562666f6c6465725f6d617463" .
            "68657318022001280912190a117075627375625f746f7069635f6e616d65" .
            "18012001280922340a1753746174654e6f74696669636174696f6e436f6e" .
            "66696712190a117075627375625f746f7069635f6e616d65180120012809" .
            "226f0a12526567697374727943726564656e7469616c124b0a167075626c" .
            "69635f6b65795f636572746966696361746518012001280b32292e676f6f" .
            "676c652e636c6f75642e696f742e76312e5075626c69634b657943657274" .
            "696669636174654800420c0a0a63726564656e7469616c22d0010a165835" .
            "3039436572746966696361746544657461696c73120e0a06697373756572" .
            "180120012809120f0a077375626a656374180220012809122e0a0a737461" .
            "72745f74696d6518032001280b321a2e676f6f676c652e70726f746f6275" .
            "662e54696d657374616d70122f0a0b6578706972795f74696d6518042001" .
            "280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70" .
            "121b0a137369676e61747572655f616c676f726974686d18052001280912" .
            "170a0f7075626c69635f6b65795f7479706518062001280922af010a1450" .
            "75626c69634b65794365727469666963617465123f0a06666f726d617418" .
            "012001280e322f2e676f6f676c652e636c6f75642e696f742e76312e5075" .
            "626c69634b65794365727469666963617465466f726d617412130a0b6365" .
            "72746966696361746518022001280912410a0c783530395f64657461696c" .
            "7318032001280b322b2e676f6f676c652e636c6f75642e696f742e76312e" .
            "58353039436572746966696361746544657461696c732295010a10446576" .
            "69636543726564656e7469616c123e0a0a7075626c69635f6b6579180220" .
            "01280b32282e676f6f676c652e636c6f75642e696f742e76312e5075626c" .
            "69634b657943726564656e7469616c480012330a0f65787069726174696f" .
            "6e5f74696d6518062001280b321a2e676f6f676c652e70726f746f627566" .
            "2e54696d657374616d70420c0a0a63726564656e7469616c22580a135075" .
            "626c69634b657943726564656e7469616c12340a06666f726d6174180120" .
            "01280e32242e676f6f676c652e636c6f75642e696f742e76312e5075626c" .
            "69634b6579466f726d6174120b0a036b657918022001280922a0010a0c44" .
            "6576696365436f6e666967120f0a0776657273696f6e1801200128031235" .
            "0a11636c6f75645f7570646174655f74696d6518022001280b321a2e676f" .
            "6f676c652e70726f746f6275662e54696d657374616d7012330a0f646576" .
            "6963655f61636b5f74696d6518032001280b321a2e676f6f676c652e7072" .
            "6f746f6275662e54696d657374616d7012130a0b62696e6172795f646174" .
            "6118042001280c22530a0b4465766963655374617465122f0a0b75706461" .
            "74655f74696d6518012001280b321a2e676f6f676c652e70726f746f6275" .
            "662e54696d657374616d7012130a0b62696e6172795f6461746118022001" .
            "280c2a4c0a094d7174745374617465121a0a164d5154545f53544154455f" .
            "554e535045434946494544100012100a0c4d5154545f454e41424c454410" .
            "0112110a0d4d5154545f44495341424c454410022a4c0a09487474705374" .
            "617465121a0a16485454505f53544154455f554e53504543494649454410" .
            "0012100a0c485454505f454e41424c4544100112110a0d485454505f4449" .
            "5341424c454410022a650a1a5075626c69634b6579436572746966696361" .
            "7465466f726d6174122d0a29554e5350454349464945445f5055424c4943" .
            "5f4b45595f43455254494649434154455f464f524d4154100012180a1458" .
            "3530395f43455254494649434154455f50454d10012a760a0f5075626c69" .
            "634b6579466f726d617412210a1d554e5350454349464945445f5055424c" .
            "49435f4b45595f464f524d41541000120b0a075253415f50454d10031210" .
            "0a0c5253415f583530395f50454d1001120d0a0945533235365f50454d10" .
            "0212120a0e45533235365f583530395f50454d100442660a17636f6d2e67" .
            "6f6f676c652e636c6f75642e696f742e7631420e5265736f757263657350" .
            "726f746f50015a36676f6f676c652e676f6c616e672e6f72672f67656e70" .
            "726f746f2f676f6f676c65617069732f636c6f75642f696f742f76313b69" .
            "6f74f80101620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

