<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\MobileAppTroubleshootingEvents\AppLogCollectionRequests;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AppLogCollectionDownloadDetails;

/**
 * Request builder for /deviceManagement/mobileAppTroubleshootingEvents/{mobileAppTroubleshootingEvent-id}/appLogCollectionRequests/{appLogCollectionRequest-id}/createDownloadUrl
 */
class CreateDownloadUrlRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action createDownloadUrl
     * @param AppLogCollectionDownloadDetails|\stdClass $body Request body
     * @return AppLogCollectionDownloadDetails|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(AppLogCollectionDownloadDetails|\stdClass $body): AppLogCollectionDownloadDetails|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to AppLogCollectionDownloadDetails|\stdClass|null
     */
    private function deserializePost(string $body): AppLogCollectionDownloadDetails|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AppLogCollectionDownloadDetails($data);
    }
}
