<?php

namespace HnhDigital\LinodeApi\Nodebalancers\Configs;

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
 * This is the Node class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Nodebalancers-Configs-Nodes
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Node extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'nodebalancers/%s/configs/%s/nodes/%s';
    /**
     * Node Balancer Id.
     *
     * @var int
     */
    protected $node_balancer_id;
    /**
     * Config Id.
     *
     * @var int
     */
    protected $config_id;

    /**
     * This model is fillable.
     *
     * @var bool
     */
    protected $fillable = true;

    /**
     * This model's method that provides the data to fill it.
     *
     * @var string
     */
    protected $fill_method = 'get';


    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($node_balancer_id, $config_id, $fill = [])
    {
        $this->node_balancer_id = $node_balancer_id;
        $this->config_id = $config_id;
        parent::__construct($node_balancer_id, $config_id, $fill);
    }

    /**
     * Returns information about a single Node, a backend for this NodeBalancer's configured port.
     *
     * @link https://developers.linode.com/api/v4#operation/getNodeBalancerNode
     *
     * @return array
     */
    public function get($node_id)
    {
        return $this->apiCall('get', '', [], ['auto-fill' => true]);
    }

    /**
     * Updates information about a Node, a backend for this NodeBalancer's configured port.
     *
     * @param int $node_balancer_id The ID of the NodeBalancer to access.
     * @param int $config_id        The ID of the Config to access
     * @param int $node_id          The ID of the Node to access
     *
     * @link https://developers.linode.com/api/v4#operation/updateNodeBalancerNode
     *
     * @return void
     */
    public function update($node_id, $optional = [])
    {
        return $this->apiCall('put', '', ['json' => $this->getDirty($optional)]);
    }

    /**
     * Deletes a Node from this Config. This backend will no longer receive traffic for the configured port of this
     * NodeBalancer.
     *
     * This does not change or remove the Linode whose address was used in the creation of this Node.
     *
     * @param int $node_balancer_id The ID of the NodeBalancer to access.
     * @param int $config_id        The ID of the Config to access
     * @param int $node_id          The ID of the Node to access
     *
     * @link https://developers.linode.com/api/v4#operation/deleteNodeBalancerConfigNode
     *
     * @return void
     */
    public function delete()
    {
        return $this->apiCall('delete', '');
    }
}
