<?php
    $items
    switch ($request->tipus) {
        case 'AG':
            $items = array('CFGM Gestió administrativa','CFGM Gestió adiministrativa (àmbit jurídic)','CFGS Administració i finances','CFGS Assistencia a la direcció');
            break;

        case 'CM':
            $items = array('CFGM Activitats comercials','CFGS Comerç internacional','CFGS Gestió de vendes i espais comercials','CFGS Transport i logística');
            break;

        case 'IC':
            $items = array('CFGM Sistemes microinformàtics i xarxes','CFGS Administració de sistemes informàtics en la xarxa','CFGS Desenvolupament d\'aplicacions multiplataforma','CFGS Desenvolupament d\'aplicacions web');
            break;

        case 'SC':
            $items = array('CFGM Atenció a persones en situació de dependència','CFGS Animació sociocultural i turística','CFGS Educació infantil','CFGS Integració social');
            break;
    }

    header('Content-Type: application/xml');
    header('Cache-control: no-cache');
    header('Expires: -1');

    public void Swoole\Http\Response::write(resultat($items));

    public function resultat($arrItems){
        $sRes;
        $sRes = "<?xml version=""1.0"" encoding=""UTF-8"" ?>"."\n"."<items>";
        if (is_array($arrItems)) {
            foreach ($arrItems as $item) {
                $sRes = $sRes."<item>".$item."</item>";
            }
        }else{
            $sRes = $sRes."<item>[No hi ha dades]</item>";
        }
        $sRes = $sRes."</items>";
        return $sRes;
    }
?>
