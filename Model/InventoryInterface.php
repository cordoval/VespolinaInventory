<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\InventoryBundle\Model;

/**
 * @author Daniel Kucharski <daniel@xerias.be>
 * @author Richard Shank <develop@zestic.com>
 */
interface InventoryInterface
{

    /**
     * An inventory object should at least have a Stock Keeping Unit identifier
     *
     * @abstract
     * @return void
     */
    function getSKU();

    function setSKU($sku);
}
