<?php
/**
 * This file is part of the Axstrad library.
 *
 * (c) Dan Kempster <dev@dankempster.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/
namespace Axstrad\Bundle\DoctrineExtensionsBundle\Entity;

use Axstrad\DoctrineExtensions\Activatable\Activatable;
use Axstrad\DoctrineExtensions\Mapping\Annotation as Axstrad;
use Doctrine\ORM\Mapping as ORM;


/**
 * Axstrad\Bundle\DoctrineExtensionsBundle\Entity\AbstractActivatable
 *
 * @Axstrad\Activatable(fieldName="active")
 * @ORM\MappedSuperClass
 */
class AbstractActivatable
    implements Activatable
{
    /**
     * @ORM\Column(type="boolean", options={"default":true})
     * @var boolean
     */
    protected $active = true;


    /**
     * Get active
     *
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * Set active
     *
     * @param  boolean $active=true
     * @return AbstractActivatable Returns self for fluent interface
     */
    public function setActive($active=true)
    {
        $this->active = $active === true;

        return $this;
    }
}