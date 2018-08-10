<?php
/**
 * Displays Login Customer
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

?>

	<a id="LoginNavigation" class="e-Toglle NavigationButton NavigationButton--login is-animating u-positionRelative u-flex u-zIndex4 u-isCollapsed u-contentHide--button" href="#" title="Área do Cliente">
		<i class="u-inlineFlex">
			<svg class="iconUser NavigationButton-icon u-onlyMobile u-icon is-animating is-animating--switch is-animating--switch--imgA is-animating--rotate">
				<use xlink:href="#iconUser"></use>
			</svg>
			<svg class="iconClose NavigationButton-icon u-onlyMobile u-icon is-animating is-animating--switch is-animating--switch--imgB is-animating--rotate">
				<use xlink:href="#iconClose"></use>
			</svg>	
		</i>
		<span class="u-isOut Label is-animating">
		ÁREA DO CLIENTE
		<i class="u-inlineFlex u-flex u-flexDirectionColumn">
			<svg class="NavigationButton-icon u-icon u-onlyDesktop iconArrowRight is-animating is-animating--rotate">
				<use xlink:href="#iconArrowRight"></use>
			</svg>
		</i>
		</span>
	</a>

	<div id="LoginNavigation-container" class="HeaderLogin-content Navigation Navigation--login Navigation--content Navigation--content--style2  u-isCollapsed u-contentHide u-contentHide--height u-size24of24 is-animating">
		<form class="HeaderLogin-content-form Form Form--style1" rel="nofollow" action="https://saczoeweb.com.br/dologin.php" method="POST">
			<fieldset class="Form-fieldset u-paddingVertical">
				<legend class="Form-fieldset-legend u-alignCenter u-displayBlock u-size24of24 u-paddingTop--inter">ÁREA DO CLIENTE</legend>
				<p class="Form-row u-overflowHidden u-positionRelative u-dusplayBlock u-marginHorizontal--inter--half u-marginVertical is-animating">
					<label class="Form-label u-displayBlock u-size24of24" for="login">Login</label>
					<input class="Form-input Form-input--text u-size24of24" type="text" id="sFrmUsuario" name="username" placeholder="Digite seu Login">
				</p>
				<p class="Form-row u-overflowHidden u-positionRelative u-dusplayBlock u-marginHorizontal--inter--half u-marginVertical is-animating">
					<label class="Form-label u-displayBlock u-size24of24" for="password">Senha</label>
					<input class="Form-input Form-input--password u-size24of24" type="password" id="sFrmSenha" name="password" placeholder="Digite sua Senha">
				</p>
				<p class="Form-row--half u-positionRelative u-overflowHidden u-dusplayBlock u-marginHorizontal--inter--half u-marginVertical is-animating">
					<a rel="nofollow" href="http://saczoeweb.com.br/pwreset.php" title="Esqueci a Senha">Esqueci a minha senha.</a>
				</p>
				<p class="Form-row u-positionRelative u-overflowHidden u-dusplayBlock u-marginHorizontal--inter--half u-marginVertical is-animating">
					<input type="submit" id="btnLogin" name="sFrmEntrar" value="Entrar" class="Form-input TextIndent u-size24of24 is-animating">
				</p>
			</fieldset>
		</form>
	</div>
