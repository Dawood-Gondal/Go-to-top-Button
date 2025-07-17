<?php
declare(strict_types=1);

/**
 * @category    BugsBunny Enterprise
 * @package     BugsBunny_OrderComment
 * @copyright   Copyright (c) 2023 BugsBunny Enterprise
 * @author      dawoodgondaldev@gmail.com
 */

namespace BugsBunny\GoToTopButton\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const UPLOAD_DIR = 'media/gototopbutton';

    /**
     * @return string|void
     */
    public function getImageUrl()
    {
        $fieldValue = $this->getConfigValue('general/image');
        if ($fieldValue) {
            return rtrim(self::UPLOAD_DIR, '/') . '/' . ltrim($fieldValue, '/');
        }
    }

    /**
     * @param $field
     * @param $storeId
     * @return mixed
     */
    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue('gototopbutton/' . $field, ScopeInterface::SCOPE_STORE, $storeId);
    }
}
