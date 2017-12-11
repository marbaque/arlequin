<?php
// variables for custom filelds
$audioURL = get_field('audio_contenido');
$resumen = get_field('resumen');
$obj = get_field('objetivos');
?>

<?php if ($audioURL || $resumen || $obj): ?>

    <div class="entry-meta">

        <?php if ($audioURL): ?>
            <div class="auxiliar-box">
                <audio controls>

                    <source src="<?php echo $audioURL; ?>" type="audio/mpeg">
                    Your browser does not support the audio element.

                </audio>
                <a href="<?php echo $audioURL; ?>" title="Descargar audio">Descargar audio</a>
            </div>
        <?php endif; ?>

        <?php if ($resumen): ?>
            <div class="auxiliar-box">
                <div id="resumen-btn">
                    <a href="" title="resumen">Resumen</a>
                </div>
                <div id="resumen" class="resumen-text">
                    <?php echo $resumen; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($obj): ?>
            <div class="auxiliar-box">
                <div id="obj-btn">
                    <a>Objetivos</a>
                </div>
                <div class="objetivos-text" id="objetivos">
                    <?php echo $obj; ?>
                </div>
            </div>
        <?php endif; ?>


    </div><!-- .entry-meta -->

<?php endif; ?>