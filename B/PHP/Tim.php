<?php

class Tim
{
    private $nama = null;
    private $asalNegara = null;
    private $tahunBerdiri = null;
    private $pemain = array();

    // constructor
    public function __construct($nama = null, $asalNegara = null, $tahunBerdiri = null, $pemain = null)
    {
        $this->nama = $nama;
        $this->asalNegara = $asalNegara;
        $this->tahunBerdiri = $tahunBerdiri;
        $this->pemain = $pemain;
    }

    // setter and getter method
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setAsalNegara($asalNegara)
    {
        $this->asalNegara = $asalNegara;
    }

    public function getAsalNegara()
    {
        return $this->asalNegara;
    }

    public function setTahunBerdiri($tahunBerdiri)
    {
        $this->tahunBerdiri = $tahunBerdiri;
    }

    public function getTahunBerdiri()
    {
        return $this->tahunBerdiri;
    }

    public function setPemain($pemain)
    {
        $this->pemain = $pemain;
    }

    public function getPemain()
    {
        return $this->pemain;
    }

    public function addPemain($pemain)
    {
        array_push($this->pemain, $pemain);
    }

    // output
    public function printOut()
    {
?>
        <table border=0>
            <tr>
                <td>Nama Tim</td>
                <td>:<?php echo $this->getNama(); ?></td>
            </tr>
            <tr>
                <td>Asal Negara</td>
                <td>:<?php echo $this->getAsalNegara(); ?></td>
            </tr>
            <tr>
                <td>Tahun Berdiri</td>
                <td>:<?php echo $this->getTahunBerdiri(); ?></td>
            </tr>
            <tr>
                <td>Pemain</td>
                <td>:</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php
                    foreach ($this->getPemain() as $p) {
                        echo '-' . $p . '<br>';
                    }
                    ?>
                </td>
            </tr>
        </table>
<?php
    }
}
