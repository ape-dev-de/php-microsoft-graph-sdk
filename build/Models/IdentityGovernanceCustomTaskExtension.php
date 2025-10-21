<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceCustomTaskExtension
 */
class IdentityGovernanceCustomTaskExtension
{
    public function __construct(
        /** The callback configuration for a custom task extension. */
        public ?string $callbackConfiguration = null,
        /** When the custom task extension was created.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** When the custom extension was last modified.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The unique identifier of the Microsoft Entra user that created the custom task extension.Supports $filter(eq, ne) and $expand. */
        public ?string $createdBy = null,
        /** The unique identifier of the Microsoft Entra user that modified the custom task extension last.Supports $filter(eq, ne) and $expand. */
        public ?string $lastModifiedBy = null
    ) {}
}
