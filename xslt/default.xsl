<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
     xmlns:dc="http://purl.org/dc/elements/1.1/" version="1.0">
	<xsl:output method="xml" />

	<xsl:apply-templates/>




	<xsl:template match="channel">
		<xsl:apply-templates select="item" />
	</xsl:template>

	<xsl:template match="item">
		<a href='{link}'><img src='{flag}' border='0' />&#038;nbsp;<xsl:value-of select="title" /></a><br />
	</xsl:template>
</xsl:stylesheet>