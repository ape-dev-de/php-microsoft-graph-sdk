<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityLabelsRoot
 */
class SecurityLabelsRoot
{
    /**
     * Specifies the underlying authority that describes the type of content to be retained and its retention schedule.
     */
    private array $authorities = [];

    /**
     * Specifies a group of similar types of content in a particular department.
     */
    private array $categories = [];

    /**
     * The specific rule or regulation created by a jurisdiction used to determine whether certain labels and content should be retained or deleted.
     */
    private array $citations = [];

    /**
     * Specifies the department or business unit of an organization to which a label belongs.
     */
    private array $departments = [];

    /**
     * Specifies a unique alpha-numeric identifier for an organization’s retention schedule.
     */
    private array $filePlanReferences = [];

    /**
     * Represents how customers can manage their data, whether and for how long to retain or delete it.
     */
    private ?string $retentionLabels;

    public function getAuthorities(): array
    {
        return $this->authorities;
    }

    public function setAuthorities(array $authorities): self
    {
        $this->authorities = $authorities;
        return $this;
    }

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function setCategories(array $categories): self
    {
        $this->categories = $categories;
        return $this;
    }

    public function getCitations(): array
    {
        return $this->citations;
    }

    public function setCitations(array $citations): self
    {
        $this->citations = $citations;
        return $this;
    }

    public function getDepartments(): array
    {
        return $this->departments;
    }

    public function setDepartments(array $departments): self
    {
        $this->departments = $departments;
        return $this;
    }

    public function getFilePlanReferences(): array
    {
        return $this->filePlanReferences;
    }

    public function setFilePlanReferences(array $filePlanReferences): self
    {
        $this->filePlanReferences = $filePlanReferences;
        return $this;
    }

    public function getRetentionLabels(): ?string
    {
        return $this->retentionLabels;
    }

    public function setRetentionLabels(?string $retentionLabels): self
    {
        $this->retentionLabels = $retentionLabels;
        return $this;
    }

}
