<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Directory
 */
class Directory
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Conceptual container for user and group directory objects. */
        public array $administrativeUnits = [],
        /** Group of related custom security attribute definitions. */
        public array $attributeSets = [],
        /** Schema of a custom security attributes (key-value pairs). */
        public array $customSecurityAttributeDefinitions = [],
        /** Recently deleted items. Read-only. Nullable. */
        public array $deletedItems = [],
        /** The credentials of the device's local administrator account backed up to Microsoft Entra ID. */
        public array $deviceLocalCredentials = [],
        /** Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol. */
        public array $federationConfigurations = [],
        /** A container for on-premises directory synchronization functionalities that are available for the organization. */
        public array $onPremisesSynchronization = [],
        /** The collection of public key infrastructure instances for the certificate-based authentication feature for users in a Microsoft Entra tenant. */
        public ?string $publicKeyInfrastructure = null,
        /** List of commercial subscriptions that an organization acquired. */
        public array $subscriptions = []
    ) {}
}
