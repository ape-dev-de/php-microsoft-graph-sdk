<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Names;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookRangeView;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook/worksheets/{workbookWorksheet-id}/names/{workbookNamedItem-id}/range()/visibleView()
 */
class VisibleViewRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke function visibleView
     * @return WorkbookRangeView|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): WorkbookRangeView|\stdClass|null
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to WorkbookRangeView|\stdClass|null
     */
    private function deserializeGet(string $body): WorkbookRangeView|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkbookRangeView($data);
    }
}
