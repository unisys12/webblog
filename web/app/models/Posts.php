<?php




class Posts extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $post_id;

    /**
     *
     * @var string
     */
    public $post_author;

    /**
     *
     * @var string
     */
    public $post_title;

    /**
     *
     * @var string
     */
    public $post_desc;

    /**
     *
     * @var string
     */
    public $post_content;

    /**
     *
     * @var string
     */
    public $created_at;

    /**
     *
     * @var string
     */
    public $updated_at;

    /*public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }*/

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'post_id' => 'post_id',
            'post_author' => 'post_author',
            'post_title' => 'post_title',
            'post_desc' => 'post_desc',
            'post_content' => 'post_content',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at'
        );
    }

}
