<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Http
 */

namespace Zend\Http\Header;

/**
 * If-Modified-Since Header
 *
 * @category   Zend
 * @package    Zend_Http
 * @subpackage Headers
 * @link       http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.25
 */
class IfModifiedSince extends AbstractDate
{
    /**
     * Get header name
     *
     * @return string
     */
    public function getFieldName()
    {
        return 'If-Modified-Since';
    }
}
