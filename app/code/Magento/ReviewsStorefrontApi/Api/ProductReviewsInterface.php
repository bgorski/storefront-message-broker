<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\ReviewsStorefrontApi\Api;

use \Magento\ReviewsStorefrontApi\Api\Data\ImportReviewsRequestInterface;
use \Magento\ReviewsStorefrontApi\Api\Data\ImportReviewsResponseInterface;
use \Magento\ReviewsStorefrontApi\Api\Data\DeleteReviewsRequestInterface;
use \Magento\ReviewsStorefrontApi\Api\Data\DeleteReviewsResponseInterface;
use \Magento\ReviewsStorefrontApi\Api\Data\ProductReviewRequestInterface;
use \Magento\ReviewsStorefrontApi\Api\Data\ProductReviewResponseInterface;
use \Magento\ReviewsStorefrontApi\Api\Data\CustomerProductReviewRequestInterface;
use \Magento\ReviewsStorefrontApi\Api\Data\ProductReviewCountRequestInterface;
use \Magento\ReviewsStorefrontApi\Api\Data\ProductReviewCountResponseInterface;

/**
 * Autogenerated description for ProductReviewsInterface interface
 */
interface ProductReviewsInterface
{
    /**
     * Autogenerated description for importProductReviews interface method
     *
     * @param ImportReviewsRequestInterface $request
     * @return ImportReviewsResponseInterface
     * @throws \Throwable
     */
    public function importProductReviews(ImportReviewsRequestInterface $request): ImportReviewsResponseInterface;

    /**
     * Autogenerated description for deleteProductReviews interface method
     *
     * @param DeleteReviewsRequestInterface $request
     * @return DeleteReviewsResponseInterface
     * @throws \Throwable
     */
    public function deleteProductReviews(DeleteReviewsRequestInterface $request): DeleteReviewsResponseInterface;

    /**
     * Autogenerated description for getProductReviews interface method
     *
     * @param ProductReviewRequestInterface $request
     * @return ProductReviewResponseInterface
     * @throws \Throwable
     */
    public function getProductReviews(ProductReviewRequestInterface $request): ProductReviewResponseInterface;

    /**
     * Autogenerated description for getCustomerProductReviews interface method
     *
     * @param CustomerProductReviewRequestInterface $request
     * @return ProductReviewResponseInterface
     * @throws \Throwable
     */
    public function getCustomerProductReviews(CustomerProductReviewRequestInterface $request): ProductReviewResponseInterface;

    /**
     * Autogenerated description for getProductReviewCount interface method
     *
     * @param ProductReviewCountRequestInterface $request
     * @return ProductReviewCountResponseInterface
     * @throws \Throwable
     */
    public function getProductReviewCount(ProductReviewCountRequestInterface $request): ProductReviewCountResponseInterface;
}
