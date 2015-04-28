
<script language="javascript">
	function appletInitialized( applet ) {
		traceEvent( "appletInitialized, " + applet.getAppletInfo() );
	}
	function uploaderFilesReset( uploader ) {
		traceEvent( "uploaderFilesReset, fileCount=" + uploader.getFileCount() );
	}
	function uploaderFileAdded( uploader, file ) {
		traceEvent( "uploaderFileAdded, index=" + file.getIndex() );
	}
	function uploaderFileRemoved( uploader, file ) {
		traceEvent( "uploaderFileRemoved, path=" + file.getPath() );
	}
	function uploaderFileMoved( uploader, file, oldIndex ) {
		traceEvent( "uploaderFileMoved, path=" + file.getPath() + ", oldIndex=" + oldIndex );
	}
	function uploaderFileStatusChanged( uploader, file ) {
		dumpUploaderStatus();
		traceEvent( "uploaderFileStatusChanged, index=" + file.getIndex() + ", status=" + file.getStatus() + ", content=" + file.getResponseContent() );
	}
	function uploaderStatusChanged( uploader ) {
		traceEvent( "uploaderStatusChanged, status=" + uploader.getStatus() );
	}
	function uploaderSelectionChanged( uploader ) {
		traceEvent( "uploaderSelectionChanged" );
	}


	function traceEvent( message ) {
		//document.getElementById( "uploaderStatus" ).innerHTML += message + "<br />";
	}
	
	function dumpUploaderStatus() {
	 	var uploader = document.jumpLoaderApplet.getUploader();
		
	 	var uploaderDump = "<br /><strong>Status do Upload:</strong><br>" +
			"Status: " + uploader.getStatus() + "<br>" +
			"Total de arquivos: " + uploader.getFileCount() + "<br>" +
			"Arquivos restantes: " + uploader.getFileCountByStatus( 0 ) + "<br>" +
			"Em progresso: " + uploader.getFileCountByStatus( 1 ) + "<br>" +
			"Uploads finalizados: " + uploader.getFileCountByStatus( 2 ) + "<br>" +
			"Falhas: " + uploader.getFileCountByStatus( 3 ) + "<br>" +
			"Tamanho total dos arquivos: " + Math.floor(uploader.getFilesLength()/1024) + " KB";
	 	
		document.getElementById( "uploaderStatus" ).innerHTML = uploaderDump;
	 }

</script>

<div id="cadastro">
    <div class="caderno1"></div>   
<div class="dentrolista"> 
<div class="Pesquisa">
     
	 <h3>Insira as Imagens da Festa </h3>
	 
<applet name="jumpLoaderApplet" code="jmaster.jumploader.app.JumpLoaderApplet.class" archive="<?php echo base_url();?>java/upload.jar" mayscript="" width="700" height="400">
    	<param name="uc_imageEditorEnabled" value="true">
        <param name="uc_uploadUrl" value="<?php echo base_url(); ?>administracao/festas/galeriaup/<?php echo $id; ?>">
        
        <param name="ac_fireAppletInitialized" value="true">
        <param name="ac_fireUploaderFileAdded" value="true">
        <param name="ac_fireUploaderFileRemoved" value="true">
        <param name="ac_fireUploaderFileMoved" value="true">
        <param name="ac_fireUploaderFileStatusChanged" value="true">
        <param name="ac_fireUploaderFilesReset" value="true">
        <param name="ac_fireUploaderStatusChanged" value="true">
        <param name="ac_fireUploaderSelectionChanged" value="true">
    </applet>

<div id="uploaderStatus"></div>
</applet>
   
         </div>
    
</div>
      <div class="caderno2"> </div>
</div>
  