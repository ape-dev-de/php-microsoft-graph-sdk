<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookNamedItem
 */
class WorkbookNamedItem
{
    /**
     * The comment associated with this name.
     */
    private ?string $comment;

    /**
     * The name of the object. Read-only.
     */
    private ?string $name;

    /**
     * Indicates whether the name is scoped to the workbook or to a specific worksheet. Read-only.
     */
    private ?string $scope;

    /**
     * The type of reference is associated with the name. Possible values are: String, Integer, Double, Boolean, Range. Read-only.
     */
    private ?string $type;

    /**
     * The formula that the name is defined to refer to. For example, =Sheet14!$B$2:$H$12 and =4.75. Read-only.
     */
    private ?string $value;

    /**
     * Indicates whether the object is visible.
     */
    private ?bool $visible;

    /**
     * Returns the worksheet to which the named item is scoped. Available only if the item is scoped to the worksheet. Read-only.
     */
    private ?string $worksheet;


    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getScope(): ?string
    {
        return $this->scope;
    }

    public function setScope(?string $scope): self
    {
        $this->scope = $scope;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(?bool $visible): self
    {
        $this->visible = $visible;
        return $this;
    }

    public function getWorksheet(): ?string
    {
        return $this->worksheet;
    }

    public function setWorksheet(?string $worksheet): self
    {
        $this->worksheet = $worksheet;
        return $this;
    }

}
