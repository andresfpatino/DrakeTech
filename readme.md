# DrakeTech WordPress test

## General description
* For the landing page I created a custom page template called "Ecommerce page" which should be chosen as a template on any page of the dashboard. 
* The content of the landing page is static, all in HTML. 
Except for the product slider which is built with ["Products DrakeTech" plugin](https://github.com/andresfpatino/public/tree/main/wp-content/plugins/products-draketech). Which provides us with a shortcode `[products_draketech]` that can be used anywhere. 
* When activating the plugin in the side menu appears a new custom post type called "Products" where you can create, edit, delete new products. (You must enter for each product a name, price and image).
* Remember, after creating the products you can display them using the shortcode mentioned above. 
* If you want preview the same demo content of the screenshots, please import in a clean wordpress installation the [following file](https://github.com/andresfpatino/public/blob/main/draketecht.WordPress-test.xml)


### Shortcode plugin

```
[products_draketech]
```

## Screenshots 

![src/login.png](wp-content/themes/draketech/assets/img/documentation/login.png "Custom login")
![src/landing-product.png](wp-content/themes/draketech/assets/img/documentation/landing-product.png "Landing ecommerce")
![src/activate-plugin.png](wp-content/themes/draketech/assets/img/documentation/activate-plugin.png "Plugin activation")
![src/product_postype.png](wp-content/themes/draketech/assets/img/documentation/product_postype.png "Product Postype")
![src/edit-product.png](wp-content/themes/draketech/assets/img/documentation/edit-product.png "Edit product")

