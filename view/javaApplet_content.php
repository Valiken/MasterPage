        <div class="hero-unit">
            <h1>Java Library Applet</h1>
            <p></p>
        </div>
        <div class="row">
            <div class="span12">
                <h2>Project for CIS304</h2>
            </div>
        </div>
        
        <div class="row">
            <div class="span12" align="center">
                <Applet codebase="view/java/" code= LibraryApplet.class archive="cis304.jar" WIDTH=950 HEIGHT=450 >
                    <param name="BorrowerFile" value="borrowers.txt">
                    <param name="ItemFile" value="items.txt">
                    <param name="Copy" value="Copyright 2012">
                    <param name="Welcome" value="Welcome to the Library Lending System">
                    <param name="Creator" value="created by Brian Berg">
                </Applet>
                <p>The borrower IDs are: 001, 002, 003.</p>
            </div>
        </div>