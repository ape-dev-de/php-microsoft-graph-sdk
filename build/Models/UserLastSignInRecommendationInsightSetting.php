<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserLastSignInRecommendationInsightSetting
 */
class UserLastSignInRecommendationInsightSetting
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Optional. Indicates the time period of inactivity (with respect to the start date of the review instance) that recommendations will be configured from. The recommendation will be to deny if the user is inactive during the look-back duration. For reviews of groups and Microsoft Entra roles, any duration is accepted. For reviews of applications, 30 days is the maximum duration. If not specified, the duration is 30 days. */
    public ?string $recommendationLookBackDuration = null;

    /** 
     * Indicates whether inactivity is calculated based on the user's inactivity in the tenant or in the application. The possible values are tenant, application, unknownFutureValue. application is only relevant when the access review is a review of an assignment to an application.
     * @var UserSignInRecommendationScope|\stdClass|null
     */
    public UserSignInRecommendationScope|\stdClass|null $signInScope = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['recommendationLookBackDuration'])) {
            $this->recommendationLookBackDuration = $data['recommendationLookBackDuration'];
        }
        if (isset($data['signInScope'])) {
            $this->signInScope = is_string($data['signInScope']) ? UserSignInRecommendationScope::tryFrom($data['signInScope']) : $data['signInScope'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
