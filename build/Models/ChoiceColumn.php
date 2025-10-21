<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChoiceColumn
 */
class ChoiceColumn
{
    public function __construct(
        /** If true, allows custom values that aren't in the configured choices. */
        public ?bool $allowTextEntry = null,
        /** @var string[] The list of values available for this column. */
        public array $choices = [],
        /** How the choices are to be presented in the UX. Must be one of checkBoxes, dropDownMenu, or radioButtons */
        public ?string $displayAs = null
    ) {}
}
