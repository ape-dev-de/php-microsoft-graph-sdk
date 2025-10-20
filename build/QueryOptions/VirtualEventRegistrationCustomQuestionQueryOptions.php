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
    public const FIELD_ANSWER_CHOICES = 'answerChoices';
    public const FIELD_ANSWER_INPUT_TYPE = 'answerInputType';

    /**
     * Select specific VirtualEventRegistrationCustomQuestion properties
     * 
     * @param array<string> $select Use VirtualEventRegistrationCustomQuestionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
