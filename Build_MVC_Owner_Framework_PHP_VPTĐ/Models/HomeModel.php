
<?php
    class HomeModel extends BaseModel
    {
        const TABLE = 'homes';

        public function getAll()
        {
            return $this->all(self::TABLE);
        }
        public function fintById($id)
        {
            return __METHOD__;
        }
    }
?>