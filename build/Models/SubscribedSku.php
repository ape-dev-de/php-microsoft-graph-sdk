<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubscribedSku
 */
class SubscribedSku
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The unique ID of the account this SKU belongs to. */
        public ?string $accountId = null,
        /** The name of the account this SKU belongs to. */
        public ?string $accountName = null,
        /** The target class for this SKU. Only SKUs with target class User are assignable. Possible values are: User, Company. */
        public ?string $appliesTo = null,
        /** Enabled indicates that the prepaidUnits property has at least one unit that is enabled. LockedOut indicates that the customer canceled their subscription. Possible values are: Enabled, Warning, Suspended, Deleted, LockedOut. */
        public ?string $capabilityStatus = null,
        /** The number of licenses that have been assigned. */
        public ?float $consumedUnits = null,
        /** Information about the number and status of prepaid licenses. */
        public ?string $prepaidUnits = null,
        /** Information about the service plans that are available with the SKU. Not nullable. */
        public array $servicePlans = [],
        /** The unique identifier (GUID) for the service SKU. */
        public ?string $skuId = null,
        /** The SKU part number; for example: AAD_PREMIUM or RMSBASIC. To get a list of commercial subscriptions that an organization has acquired, see List subscribedSkus. */
        public ?string $skuPartNumber = null,
        /** @var string[] A list of all subscription IDs associated with this SKU. */
        public array $subscriptionIds = []
    ) {}
}
