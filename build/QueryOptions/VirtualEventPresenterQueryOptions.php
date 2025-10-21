<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventPresenter resources
 *
 * Available select fields:
 * - email
 * - identity
 * - presenterDetails
 */
class VirtualEventPresenterQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventPresenter
     */
    public const FIELD_EMAIL = 'email';
    public const FIELD_IDENTITY = 'identity';
    public const FIELD_PRESENTER_DETAILS = 'presenterDetails';

    /**
     * Select specific VirtualEventPresenter properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
