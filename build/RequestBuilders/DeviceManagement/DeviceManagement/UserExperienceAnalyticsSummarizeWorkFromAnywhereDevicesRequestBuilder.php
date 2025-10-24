<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceManagement;

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
     * @return UserExperienceAnalyticsWorkFromAnywhereDevicesSummary|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): UserExperienceAnalyticsWorkFromAnywhereDevicesSummary|\stdClass
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to UserExperienceAnalyticsWorkFromAnywhereDevicesSummary|\stdClass
     */
    private function deserializeGet(string $body): mixed
    {
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
