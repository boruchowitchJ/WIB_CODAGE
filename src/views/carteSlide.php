<div class="slide">
    Bonjour slide
</div>

<img id ="img" src="base64;" alt="">



<!-- commentaire  mettre tous les $pois dans une DB -->
<?php 
    $pois = [
        [ 'nom' => 'atomium', 'desc'=> 'test', 'img' => '/assets/images/place/atomium.jpg' ], 
        [ 'nom' => 'basilique', 'desc' => 'test2','img' => '/assets/images/place/basilique.jpg' ],

    ];
    $json = json_encode($pois);
?>

<script>

    const pois = JSON.parse('<?= $json ?>');
    $('.lien').on('click', e => {
        e.preventDefault();
        const currentEvent = pois.find(p => p.nom == e.currentTarget.getAttribute('data-place'));
        $('#img').attr('src', currentEvent.img)
    })
</script>