<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventRegistrationCustomQuestion resources
 *
 * Available select fields:
 * - answerChoices
 * - answerInputType
 */
class VirtualEventRegistrationCustomQuestionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventRegistrationCustomQuestion
     */
    public const FIELD_ANSWER_CHOICES = 'answerChoices';
    public const FIELD_ANSWER_INPUT_TYPE = 'answerInputType';

    /**
     * Select specific VirtualEventRegistrationCustomQuestion properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
