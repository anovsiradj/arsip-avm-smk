<?php
echo new NoExtentionIterator('../main');
class NoExtentionIterator extends FilesystemIterator {
    public function current() {
        return pathinfo(parent::current(), PATHINFO_FILENAME);
    }
    public function accept() {
        return parent::current()->isfile();
    }
    public function __toString() {
        return implode("\n", iterator_to_array($this));
    }
}
?>