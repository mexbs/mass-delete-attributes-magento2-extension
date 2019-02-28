<h1>Mass Delete Attributes Magento 2 extension</h1>
<h2>Installation steps</h2>
<p>
<ol>
  <li>Copy the content of the Mexbs_ProductAttributesMassAction-v1.0.0 directory into your Magento installation directory.</li>
  <li>Connect via SSH and go to your Magento root directory</li>
  <li>Determine the mode that your Magento is running on, by running the following command: <code>php bin/magento deploy:mode:show</code></li>
  <li><p>If you are in developer or default mode, run the following commands:</p>
    <ul>
      <li><code>php bin/magento module:enable Mexbs_ProductAttributesMassAction --clear-static-content</code></li>
      <li><code>php bin/magento setup:upgrade</code></li>
      <li>If your Magento version is 2.0.x or 2.1.x run: <code>php bin/magento setup:static-content:deploy</code></li>
      <li>If your Magetno version is 2.2.x or 2.3.x run: <code>php bin/magento setup:static-content:deploy -f</code></li>
      </ul>
  </li>
    <li><p>If you are in production mode, run the following commands:</p>
    <ul>
      <li><code>php bin/magento module:enable Mexbs_ProductAttributesMassAction --clear-static-content</code></li>
      <li><code>php bin/magento setup:upgrade</code></li>
      <li><code>php bin/magento setup:di:compile</code></li>
      <li><code>php bin/magento setup:static-content:deploy</code></li>
      </ul>
  </li>
  <li>Go to the admin panel – “System->Cache Management” and click “Flush Magento Cache”</li>
</ol>  
</p>
<h2>Screenshots and user guide</h2>
<p>For user guide and screenshots, visit the <a href="https://www.mexbs.com/magento-blog/mass-delete-attributes-free-magento-extension/" target="_blank">Mexbs website - Mass Delete Attributes Magento 2 extension.</a></p>
