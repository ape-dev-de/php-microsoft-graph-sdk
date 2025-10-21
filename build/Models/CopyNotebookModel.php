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
        public ?string $id = null,
        /**  */
        public ?string $createdBy = null,
        /**  */
        public ?IdentitySet $createdByIdentity = null,
        /**  */
        public ?\DateTimeInterface $createdTime = null,
        /**  */
        public ?bool $isDefault = null,
        /**  */
        public ?bool $isShared = null,
        /**  */
        public ?string $lastModifiedBy = null,
        /**  */
        public ?IdentitySet $lastModifiedByIdentity = null,
        /**  */
        public ?\DateTimeInterface $lastModifiedTime = null,
        /**  */
        public ?NotebookLinks $links = null,
        /**  */
        public ?string $name = null,
        /**  */
        public ?string $sectionGroupsUrl = null,
        /**  */
        public ?string $sectionsUrl = null,
        /**  */
        public ?string $self = null,
        /**  */
        public ?OnenoteUserRole $userRole = null
    ) {}
}
