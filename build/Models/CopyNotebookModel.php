<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CopyNotebookModel
 */
class CopyNotebookModel
{
    public function __construct(
        /**  */
        public ?string $createdBy = null,
        /**  */
        public ?string $createdByIdentity = null,
        /**  */
        public ?\DateTimeInterface $createdTime = null,
        /**  */
        public ?string $id = null,
        /**  */
        public ?bool $isDefault = null,
        /**  */
        public ?bool $isShared = null,
        /**  */
        public ?string $lastModifiedBy = null,
        /**  */
        public ?string $lastModifiedByIdentity = null,
        /**  */
        public ?\DateTimeInterface $lastModifiedTime = null,
        /**  */
        public ?string $links = null,
        /**  */
        public ?string $name = null,
        /**  */
        public ?string $sectionGroupsUrl = null,
        /**  */
        public ?string $sectionsUrl = null,
        /**  */
        public ?string $self = null,
        /**  */
        public ?string $userRole = null
    ) {}
}
