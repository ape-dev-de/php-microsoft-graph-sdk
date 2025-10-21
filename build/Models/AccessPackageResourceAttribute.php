<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageResourceAttribute
 */
class AccessPackageResourceAttribute
{
    public function __construct(
        /** Information about how to set the attribute, currently a accessPackageUserDirectoryAttributeStore type. */
        public ?AccessPackageResourceAttributeDestination $destination = null,
        /**  */
        public ?bool $isEditable = null,
        /**  */
        public ?bool $isPersistedOnAssignmentRemoval = null,
        /** The name of the attribute in the end system. If the destination is accessPackageUserDirectoryAttributeStore, then a user property such as jobTitle or a directory schema extension for the user object type, such as extension2b676109c7c74ae2b41549205f1947edpersonalTitle. */
        public ?string $name = null,
        /** Information about how to populate the attribute value when an accessPackageAssignmentRequest is being fulfilled, currently a accessPackageResourceAttributeQuestion type. */
        public ?AccessPackageResourceAttributeSource $source = null
    ) {}
}
