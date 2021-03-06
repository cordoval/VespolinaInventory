<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\InventoryBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * @author Richard D Shank <develop@zestic.com>
 */
abstract class InventoryTestCommon extends WebTestCase
{
    protected function createInventory($product = null, $identifierSet = null)
    {
        $product = $product ? $product : 'product';
        $inv = $this->getMockForAbstractClass('\Vespolina\InventoryBundle\Model\Inventory', array($product, $identifierSet));

        return $inv;
    }
}
