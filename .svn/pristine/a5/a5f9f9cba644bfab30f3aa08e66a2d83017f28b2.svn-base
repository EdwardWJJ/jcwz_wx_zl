// pages/address/address.js 
const app = getApp();
Page({

  /**
   * 页面的初始数据
   */
  data: {

  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    var that = this;
    wx.request({
      url: app.globalData.rootUrl + "/index/address",
      method: "POST",
      header: {
        "content-type": "application/x-www-form-urlencoded"
      },
      data: {
        // status_bit: 3
      },
      success: function (res) {
        console.log(res.data);
        that.setData({
          list: res.data[0]
        });
      }
    });
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {

  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {

  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {

  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {

  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {

  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {

  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {

  },

  updateadrs: function (data) {

    console.log(data.detail.value)
    var user_name = data.detail.value.user_name
    var user_phone = data.detail.value.user_phone;
    var user_time = data.detail.value.user_time;
    var user_region = data.detail.value.user_region;
    var detailed_address = data.detail.value.detailed_address;
    var that = this;
    wx.request({
      url: app.globalData.rootUrl + "/index/addressupdate",
      method: "POST",
      header: {
        "content-type": "application/x-www-form-urlencoded"
      },
      data: {
        user_name: user_name,
        user_phone: user_phone,
        user_time: user_time,
        user_region: user_region,
        detailed_address: detailed_address,
      },
      success: function (res) {
        console.log(res.data);
        if (res.data == 1) {
          wx.showToast({
            title: '编辑成功',
            icon: 'success',
            duration: 2000//持续的时间
          })
        }else {
          wx.showToast({
            title: '编辑失败',
            icon: 'success',
            duration: 2000//持续的时间
          })
        }
      }
    });

  },

})