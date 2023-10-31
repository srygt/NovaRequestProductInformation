<?php

namespace NovaRequestProductInformation\Storefront\Controller;

use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @RouteScope(scopes={"storefront"})
 */
class NovaRequestProductInformationController extends StorefrontController
{
    /**
     * @Route("/NovaRequestProductInformation", name="frontend.NovaRequestProductInformation.NovaRequestProductInformation", methods={"GET"})
     */
    public function showPage(Request $request, SalesChannelContext $context): Response
    {
        return $this->renderStorefront('@NovaRequestProductInformation/storefront/page/product-detail/index.html.twig', [
            'customParameter' => 'Custom parameter value'
        ]);
    }
}