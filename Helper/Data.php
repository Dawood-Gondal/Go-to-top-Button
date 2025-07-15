<?php
namespace BugsBunny\GoToTopButton\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const UPLOAD_DIR = 'media/gototopbutton';

    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue('gototopbutton/' . $field, ScopeInterface::SCOPE_STORE, $storeId);
    }
    public function getImageUrl()
    {
        $fieldValue = $this->getConfigValue('general/image');
        if ($fieldValue) {
            return rtrim(self::UPLOAD_DIR, '/') . '/' . ltrim($fieldValue, '/');
        }
    }
}
