<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/conversion_action.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V0\Resources;

class ConversionAction
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\AttributionModel::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\ConversionActionCategory::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\ConversionActionCountingType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\ConversionActionStatus::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\ConversionActionType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\DataDrivenModelStatus::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\TrackingCodePageFormat::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\TrackingCodeType::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab8150a39676f6f676c652f6164732f676f6f676c656164732f76302f72" .
            "65736f75726365732f636f6e76657273696f6e5f616374696f6e2e70726f" .
            "746f1221676f6f676c652e6164732e676f6f676c656164732e76302e7265" .
            "736f75726365731a3e676f6f676c652f6164732f676f6f676c656164732f" .
            "76302f656e756d732f636f6e76657273696f6e5f616374696f6e5f636174" .
            "65676f72792e70726f746f1a43676f6f676c652f6164732f676f6f676c65" .
            "6164732f76302f656e756d732f636f6e76657273696f6e5f616374696f6e" .
            "5f636f756e74696e675f747970652e70726f746f1a3c676f6f676c652f61" .
            "64732f676f6f676c656164732f76302f656e756d732f636f6e7665727369" .
            "6f6e5f616374696f6e5f7374617475732e70726f746f1a3a676f6f676c65" .
            "2f6164732f676f6f676c656164732f76302f656e756d732f636f6e766572" .
            "73696f6e5f616374696f6e5f747970652e70726f746f1a3c676f6f676c65" .
            "2f6164732f676f6f676c656164732f76302f656e756d732f646174615f64" .
            "726976656e5f6d6f64656c5f7374617475732e70726f746f1a3d676f6f67" .
            "6c652f6164732f676f6f676c656164732f76302f656e756d732f74726163" .
            "6b696e675f636f64655f706167655f666f726d61742e70726f746f1a3667" .
            "6f6f676c652f6164732f676f6f676c656164732f76302f656e756d732f74" .
            "7261636b696e675f636f64655f747970652e70726f746f1a1e676f6f676c" .
            "652f70726f746f6275662f77726170706572732e70726f746f229e0f0a10" .
            "436f6e76657273696f6e416374696f6e12150a0d7265736f757263655f6e" .
            "616d6518012001280912270a02696418022001280b321b2e676f6f676c65" .
            "2e70726f746f6275662e496e74363456616c7565122a0a046e616d651803" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756" .
            "616c756512600a0673746174757318042001280e32502e676f6f676c652e" .
            "6164732e676f6f676c656164732e76302e656e756d732e436f6e76657273" .
            "696f6e416374696f6e537461747573456e756d2e436f6e76657273696f6e" .
            "416374696f6e537461747573125a0a047479706518052001280e324c2e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76302e656e756d732e43" .
            "6f6e76657273696f6e416374696f6e54797065456e756d2e436f6e766572" .
            "73696f6e416374696f6e5479706512660a0863617465676f727918062001" .
            "280e32542e676f6f676c652e6164732e676f6f676c656164732e76302e65" .
            "6e756d732e436f6e76657273696f6e416374696f6e43617465676f727945" .
            "6e756d2e436f6e76657273696f6e416374696f6e43617465676f72791234" .
            "0a0e6f776e65725f637573746f6d657218072001280b321c2e676f6f676c" .
            "652e70726f746f6275662e537472696e6756616c756512410a1d696e636c" .
            "7564655f696e5f636f6e76657273696f6e735f6d65747269631808200128" .
            "0b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c756512" .
            "470a22636c69636b5f7468726f7567685f6c6f6f6b6261636b5f77696e64" .
            "6f775f6461797318092001280b321b2e676f6f676c652e70726f746f6275" .
            "662e496e74363456616c756512460a21766965775f7468726f7567685f6c" .
            "6f6f6b6261636b5f77696e646f775f64617973180a2001280b321b2e676f" .
            "6f676c652e70726f746f6275662e496e74363456616c756512590a0e7661" .
            "6c75655f73657474696e6773180b2001280b32412e676f6f676c652e6164" .
            "732e676f6f676c656164732e76302e7265736f75726365732e436f6e7665" .
            "7273696f6e416374696f6e2e56616c756553657474696e677312730a0d63" .
            "6f756e74696e675f74797065180c2001280e325c2e676f6f676c652e6164" .
            "732e676f6f676c656164732e76302e656e756d732e436f6e76657273696f" .
            "6e416374696f6e436f756e74696e6754797065456e756d2e436f6e766572" .
            "73696f6e416374696f6e436f756e74696e675479706512700a1a61747472" .
            "69627574696f6e5f6d6f64656c5f73657474696e6773180d2001280b324c" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76302e7265736f75" .
            "726365732e436f6e76657273696f6e416374696f6e2e4174747269627574" .
            "696f6e4d6f64656c53657474696e677312540a0c7461675f736e69707065" .
            "7473180e2003280b323e2e676f6f676c652e6164732e676f6f676c656164" .
            "732e76302e7265736f75726365732e436f6e76657273696f6e416374696f" .
            "6e2e546167536e697070657412400a1b70686f6e655f63616c6c5f647572" .
            "6174696f6e5f7365636f6e6473180f2001280b321b2e676f6f676c652e70" .
            "726f746f6275662e496e74363456616c7565122c0a066170705f69641810" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756" .
            "616c75651aed010a184174747269627574696f6e4d6f64656c5365747469" .
            "6e6773125f0a116174747269627574696f6e5f6d6f64656c18012001280e" .
            "32442e676f6f676c652e6164732e676f6f676c656164732e76302e656e75" .
            "6d732e4174747269627574696f6e4d6f64656c456e756d2e417474726962" .
            "7574696f6e4d6f64656c12700a18646174615f64726976656e5f6d6f6465" .
            "6c5f73746174757318022001280e324e2e676f6f676c652e6164732e676f" .
            "6f676c656164732e76302e656e756d732e4461746144726976656e4d6f64" .
            "656c537461747573456e756d2e4461746144726976656e4d6f64656c5374" .
            "617475731ab3020a0a546167536e697070657412520a0474797065180120" .
            "01280e32442e676f6f676c652e6164732e676f6f676c656164732e76302e" .
            "656e756d732e547261636b696e67436f646554797065456e756d2e547261" .
            "636b696e67436f64655479706512650a0b706167655f666f726d61741802" .
            "2001280e32502e676f6f676c652e6164732e676f6f676c656164732e7630" .
            "2e656e756d732e547261636b696e67436f646550616765466f726d617445" .
            "6e756d2e547261636b696e67436f646550616765466f726d617412350a0f" .
            "676c6f62616c5f736974655f74616718032001280b321c2e676f6f676c65" .
            "2e70726f746f6275662e537472696e6756616c756512330a0d6576656e74" .
            "5f736e697070657418042001280b321c2e676f6f676c652e70726f746f62" .
            "75662e537472696e6756616c75651abf010a0d56616c756553657474696e" .
            "677312330a0d64656661756c745f76616c756518012001280b321c2e676f" .
            "6f676c652e70726f746f6275662e446f75626c6556616c7565123b0a1564" .
            "656661756c745f63757272656e63795f636f646518022001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e537472696e6756616c7565123c0a18" .
            "616c776179735f7573655f64656661756c745f76616c756518032001280b" .
            "321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c756542da" .
            "010a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e7630" .
            "2e7265736f75726365734215436f6e76657273696f6e416374696f6e5072" .
            "6f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e7072" .
            "6f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76" .
            "302f7265736f75726365733b7265736f7572636573a20203474141aa0221" .
            "476f6f676c652e4164732e476f6f676c654164732e56302e5265736f7572" .
            "636573ca0221476f6f676c655c4164735c476f6f676c654164735c56305c" .
            "5265736f7572636573620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

