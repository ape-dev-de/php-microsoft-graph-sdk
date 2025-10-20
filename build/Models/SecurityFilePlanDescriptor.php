<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFilePlanDescriptor
 */
class SecurityFilePlanDescriptor
{
    /**
     * Represents the file plan descriptor of type authority applied to a particular retention label.
     */
    private ?string $authority;

    /**
     */
    private ?string $category;

    /**
     * Represents the file plan descriptor of type citation applied to a particular retention label.
     */
    private ?string $citation;

    /**
     * Represents the file plan descriptor of type department applied to a particular retention label.
     */
    private ?string $department;

    /**
     * Represents the file plan descriptor of type filePlanReference applied to a particular retention label.
     */
    private ?string $filePlanReference;

    /**
     * Specifies the underlying authority that describes the type of content to be retained and its retention schedule.
     */
    private ?string $authorityTemplate;

    /**
     * Specifies a group of similar types of content in a particular department.
     */
    private ?string $categoryTemplate;

    /**
     * The specific rule or regulation created by a jurisdiction used to determine whether certain labels and content should be retained or deleted.
     */
    private ?string $citationTemplate;

    /**
     * Specifies the  department or business unit of an organization to which a label belongs.
     */
    private ?string $departmentTemplate;

    /**
     * Specifies a unique alpha-numeric identifier for an organization’s retention schedule.
     */
    private ?string $filePlanReferenceTemplate;

    public function getAuthority(): ?string
    {
        return $this->authority;
    }

    public function setAuthority(?string $authority): self
    {
        $this->authority = $authority;
        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;
        return $this;
    }

    public function getCitation(): ?string
    {
        return $this->citation;
    }

    public function setCitation(?string $citation): self
    {
        $this->citation = $citation;
        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(?string $department): self
    {
        $this->department = $department;
        return $this;
    }

    public function getFilePlanReference(): ?string
    {
        return $this->filePlanReference;
    }

    public function setFilePlanReference(?string $filePlanReference): self
    {
        $this->filePlanReference = $filePlanReference;
        return $this;
    }

    public function getAuthorityTemplate(): ?string
    {
        return $this->authorityTemplate;
    }

    public function setAuthorityTemplate(?string $authorityTemplate): self
    {
        $this->authorityTemplate = $authorityTemplate;
        return $this;
    }

    public function getCategoryTemplate(): ?string
    {
        return $this->categoryTemplate;
    }

    public function setCategoryTemplate(?string $categoryTemplate): self
    {
        $this->categoryTemplate = $categoryTemplate;
        return $this;
    }

    public function getCitationTemplate(): ?string
    {
        return $this->citationTemplate;
    }

    public function setCitationTemplate(?string $citationTemplate): self
    {
        $this->citationTemplate = $citationTemplate;
        return $this;
    }

    public function getDepartmentTemplate(): ?string
    {
        return $this->departmentTemplate;
    }

    public function setDepartmentTemplate(?string $departmentTemplate): self
    {
        $this->departmentTemplate = $departmentTemplate;
        return $this;
    }

    public function getFilePlanReferenceTemplate(): ?string
    {
        return $this->filePlanReferenceTemplate;
    }

    public function setFilePlanReferenceTemplate(?string $filePlanReferenceTemplate): self
    {
        $this->filePlanReferenceTemplate = $filePlanReferenceTemplate;
        return $this;
    }

}
