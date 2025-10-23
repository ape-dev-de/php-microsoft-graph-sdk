<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChoiceColumn
 */
class ChoiceColumn
{
    /** If true, allows custom values that aren't in the configured choices. */
    public ?bool $allowTextEntry = null;

    /** 
     * The list of values available for this column.
     * @var string[]
     */
    public array $choices = [];

    /** How the choices are to be presented in the UX. Must be one of checkBoxes, dropDownMenu, or radioButtons */
    public ?string $displayAs = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['allowTextEntry'])) {
            $this->allowTextEntry = $data['allowTextEntry'];
        }
        if (isset($data['choices'])) {
            $this->choices = $data['choices'];
        }
        if (isset($data['displayAs'])) {
            $this->displayAs = $data['displayAs'];
        }
    }
}
