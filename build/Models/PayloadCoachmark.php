<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PayloadCoachmark
 */
class PayloadCoachmark
{
    /** 
     * The coachmark location.
     * @var CoachmarkLocation|\stdClass|null
     */
    public mixed $coachmarkLocation = null;

    /** The description about the coachmark. */
    public ?string $description = null;

    /** The coachmark indicator. */
    public ?string $indicator = null;

    /** Indicates whether the coachmark is valid or not. */
    public ?bool $isValid = null;

    /** The coachmark language. */
    public ?string $language = null;

    /** The coachmark order. */
    public ?string $order = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['coachmarkLocation'])) {
            $this->coachmarkLocation = is_array($data['coachmarkLocation']) ? new CoachmarkLocation($data['coachmarkLocation']) : $data['coachmarkLocation'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['indicator'])) {
            $this->indicator = $data['indicator'];
        }
        if (isset($data['isValid'])) {
            $this->isValid = $data['isValid'];
        }
        if (isset($data['language'])) {
            $this->language = $data['language'];
        }
        if (isset($data['order'])) {
            $this->order = $data['order'];
        }
    }
}
