<?php
/**
 * Copyright � 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Mageplaza\SocialLogin\Observer;

class CaptchaStringResolver
{
    /**
     * Get Captcha String
     *
     * @param \Magento\Framework\App\RequestInterface $request
     * @param string $formId
     * @return string
     */
    public function resolve(\Magento\Framework\App\RequestInterface $request, $formId)
    {
        $captchaParams = $request->getPost(\Magento\Captcha\Helper\Data::INPUT_NAME_FIELD_VALUE);

        return isset($captchaParams[$formId]) ? $captchaParams[$formId] : '';
    }
}
