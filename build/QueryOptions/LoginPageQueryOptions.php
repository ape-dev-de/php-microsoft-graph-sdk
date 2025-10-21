<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LoginPage resources
 *
 * Available select fields:
 */
class LoginPageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LoginPage
     */

    /**
     * Select specific LoginPage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
