<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\CartPage\Widget;

use Spryker\Yves\Kernel\Widget\AbstractWidget;

/**
 * @method \SprykerShop\Yves\CartPage\CartPageFactory getFactory()
 */
class ProductAbstractAddToCartAjaxFormWidget extends AbstractWidget
{
    protected const PARAMETER_PRODUCT_ABSTRACT = 'productAbstract';

    /**
     * @param array $productAbstract
     */
    public function __construct(array $productAbstract)
    {
        $this->addProductAbstractParameter($productAbstract);
    }

    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'ProductAbstractAddToCartAjaxFormWidget';
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@CartPage/views/product-abstract-add-to-cart-ajax-form/product-abstract-add-to-cart-ajax-form.twig';
    }

    /**
     * @param array $productAbstract
     *
     * @return void
     */
    protected function addProductAbstractParameter(array $productAbstract): void
    {
        $this->addParameter(static::PARAMETER_PRODUCT_ABSTRACT, $productAbstract);
    }
}
