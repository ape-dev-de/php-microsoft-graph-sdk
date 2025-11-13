<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UserExperienceAnalyticsWorkFromAnywhereDevicesSummary;

/**
 * Request builder for /deviceManagement/userExperienceAnalyticsSummarizeWorkFromAnywhereDevices()
 */
class UserExperienceAnalyticsSummarizeWorkFromAnywhereDevicesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke function userExperienceAnalyticsSummarizeWorkFromAnywhereDevices
     * @return UserExperienceAnalyticsWorkFromAnywhereDevicesSummary|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): UserExperienceAnalyticsWorkFromAnywhereDevicesSummary|\stdClass|null
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to UserExperienceAnalyticsWorkFromAnywhereDevicesSummary|\stdClass|null
     */
    private function deserializeGet(string $body): UserExperienceAnalyticsWorkFromAnywhereDevicesSummary|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new UserExperienceAnalyticsWorkFromAnywhereDevicesSummary($data);
    }
}
