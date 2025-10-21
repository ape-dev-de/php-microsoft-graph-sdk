<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WelcomeScreenMeetingInformation resources
 *
 * Available select fields:
 */
class WelcomeScreenMeetingInformationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WelcomeScreenMeetingInformation
     */

    /**
     * Select specific WelcomeScreenMeetingInformation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
