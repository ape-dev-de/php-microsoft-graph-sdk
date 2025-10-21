<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PersonType
 */
class PersonType
{
    /**
     * The type of data source, such as Person.
     */
    private ?string $class;

    /**
     * The secondary type of data source, such as OrganizationUser.
     */
    private ?string $subclass;


    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setClass(?string $class): self
    {
        $this->class = $class;
        return $this;
    }

    public function getSubclass(): ?string
    {
        return $this->subclass;
    }

    public function setSubclass(?string $subclass): self
    {
        $this->subclass = $subclass;
        return $this;
    }

}
