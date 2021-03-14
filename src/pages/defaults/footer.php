<footer>
    <h1 class="contato-title">Entre em contato!</h1>
    <div class="contato">
        <form>
            <div class="contato-form">
                <label>
                    <i class="fa fa-user"></i>
                </label>
                <input type="text" name="nome_contato" placeholder="Digite seu nome...">
            </div>

            <div class="contato-form">
                <label>
                    <i class="fa fa-phone"></i>
                </label>
                <input type="text" name="tel_contato" placeholder="Telefone para contato...">
            </div>

            <div class="contato-form">
                <label>
                    <i class="fas fa-at"></i>
                </label>
                <input type="text" name="email_contato" placeholder="E-mail...">
            </div>

            <div class="msg-form">
                <label>
                    <i class="fas fa-envelope"></i>
                </label>
                <textarea name="msg_contato"></textarea>
            </div>

            <button type="submit">Enviar!</button>
        </form>
    </div>
    <p>Site desenvolvido por <a href="<?php echo INCLUDE_PATH ?>">Pedro Melém</a></p>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?php echo INCLUDE_PATH ?>/src/scripts/main.js"></script>
<script src="<?php echo INCLUDE_PATH ?>/src/scripts/tWritter.js"></script>
</body>

</html>