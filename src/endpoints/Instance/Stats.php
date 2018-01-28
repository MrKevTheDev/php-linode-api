<?php

namespace HnhDigital\LinodeApi\Instance;

/*
 * This file is part of the PHP Linode API.
 *
 * (c) H&H|Digital <hello@hnh.digital>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use HnhDigital\LinodeApi\Foundation\Base;

/**
 * This is the Stats class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/v4/reference/linode#stats
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Stats extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'linode/instances/%s/stats';
    /**
     * Linode Id.
     *
     * @var int
     */
    protected $linode_id;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($linode_id)
    {
        $this->linode_id = $linode_id;
        parent::__construct($linode_id);
    }

    /**
     * Returns statistics for the last 24 hours.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/stats
     *
     * @return array
     */
    public function current()
    {
        return $this->apiCall('get', '');
    }

    /**
     * Returns CPU, IO, IPv4, and IPv6 stats for a specific month.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/stats/$year/$month
     *
     * @return array
     */
    public function period($year, $month)
    {
        return $this->apiCall('get', '/$year/$month');
    }
}
