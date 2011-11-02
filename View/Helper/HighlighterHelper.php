<?php

class HighlighterHelper extends AppHelper {

	var $helpers = array(
		'Html',
		'Js',
	);

	function beforeRender() {

		if (!isset($this->request->params['admin']) && !$this->request->isAjax()) {

			$this->Html->css('/highlighter/css/shCore',null,array('inline'=>false));
			$this->Html->css('/highlighter/css/shThemeFadeToGrey',null,array('inline'=>false));
			$this->Html->script('/highlighter/js/shCore.js',array('inline'=>false));
			$this->Html->script('/highlighter/js/shBrushCss.js',array('inline'=>false));
			$this->Html->script('/highlighter/js/shBrushJava.js',array('inline'=>false));
			$this->Html->script('/highlighter/js/shBrushJScript.js',array('inline'=>false));
			$this->Html->script('/highlighter/js/shBrushPhp.js',array('inline'=>false));
			$this->Html->script('/highlighter/js/shBrushPlain.js',array('inline'=>false));
			$this->Html->script('/highlighter/js/shBrushSql.js',array('inline'=>false));
			$this->Html->script('/highlighter/js/shBrushXml.js',array('inline'=>false));
			$this->Html->scriptBlock("
				SyntaxHighlighter.config.stripBrs = true;
				SyntaxHighlighter.defaults['wrap-lines'] = true;
				SyntaxHighlighter.all();
			",array('inline'=>false));
		}
	}

}
