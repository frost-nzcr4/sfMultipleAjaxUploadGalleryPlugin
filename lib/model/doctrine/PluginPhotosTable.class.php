<?php

abstract class PluginPhotosTable extends Doctrine_Table {

    public function getDefault($gallery_id) {
        return $this->createQuery('c')
                ->andWhere('c.gallery_id = ?', $gallery_id)
                ->andWhere('c.is_default = ?', 1)
                ->fetchOne();
    }
}
